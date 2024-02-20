using namespace System.IO
$sourceRoot = ".\source"
$targetRoot = ".\docs"

$targetRoot = [Path]::GetFullPath($targetRoot)
pushd $sourceRoot
ls -r *.* | %{
    $sourceFile = $_.FullName
    $name = [Path]::GetFileNameWithoutExtension($_)
    $ext = $_.Extension
    $relativePath = [Path]::GetDirectoryName([Path]::GetRelativePath($pwd, $_.FullName))

    $target = [Path]::Combine($targetRoot, $relativePath)

    md -force $target | Out-Null

    echo "Processing: $sourceFile"

    switch ($ext) {
        ".php" {
            $targetFile = [Path]::Combine($target, $name + ".html")
            ..\..\php\php.exe $sourceFile > gen.html

            $warnings = @()
            cat gen.html `
            | % { if ($_.Contains("Warning:")) { $warnings += $_ } } `
            | % { $_ -replace ".php", ".html" } `
            > $targetFile

            del gen.html

            if ($warnings.Length -ne 0) {
                $warnings
                del $targetFile
            }
        }
        ".ps1" { $targetFile = "IGNORE" }
        Default {
            $targetFile = [Path]::Combine($target, $name + $ext)
            cp $sourceFile $target
        }
    }

    echo "Target: $targetFile"
}

popd