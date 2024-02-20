using namespace System.IO
$targetRoot = ".\docs"

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
            ..\php\php.exe $sourceFile > gen.html
            cat gen.html `
            | % { $_ -replace ".php", ".html" } `
            > $targetFile

            del gen.html
        }
        ".ps1" { $targetFile = "IGNORE" }
        Default {
            $targetFile = [Path]::Combine($target, $name + $ext)
            cp $sourceFile $target
        }
    }

    echo "Target: $targetFile"
}