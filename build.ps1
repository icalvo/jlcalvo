using namespace System.IO

$ErrorActionPreference = "Stop"
$sourceRoot = ".\source"
$targetRoot = ".\_publish"

$targetRoot = $ExecutionContext.SessionState.Path.GetUnresolvedProviderPathFromPSPath($targetRoot)
Push-Location $sourceRoot
Get-ChildItem -r *.* `
| ForEach-Object {
    $sourceFile = $_.FullName
    $name = [Path]::GetFileNameWithoutExtension($_)
    $ext = $_.Extension
    $relativePath = [Path]::GetDirectoryName([Path]::GetRelativePath($pwd, $_.FullName))

    $target = [Path]::Combine($targetRoot, $relativePath)

    mkdir -force $target | Out-Null

    Write-Output "Processing: $sourceFile"

    switch ($ext) {
        ".php" {
            $targetFile = [Path]::Combine($target, $name + ".html")
            ..\..\php\php.exe $sourceFile > gen.html

            $warnings = @()
            Get-Content gen.html `
            | ForEach-Object { if ($_.Contains("Warning:")) { $warnings += $_ }; $_ } `
            | ForEach-Object { $_ -replace ".php", ".html" } `
            > $targetFile

            Remove-Item gen.html

            if ($warnings.Length -ne 0) {
                Write-Output "ERRORS"
                $warnings
                Remove-Item $targetFile
            }
        }
        ".ps1" { $targetFile = "IGNORE" }
        Default {
            $targetFile = [Path]::Combine($target, $name + $ext)
            Copy-Item $sourceFile $targetFile
        }
    }

    Write-Output "Target: $targetFile"
    # read-host "Press key"
}

Pop-Location