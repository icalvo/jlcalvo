using namespace System.IO
$targetRoot = "C:\Users\ignacio.calvo\Repos\jlcalvo"

ls -r *.* | %{
    $sourceFile = $_.FullName
    $name = [Path]::GetFileNameWithoutExtension($_)
    $ext = $_.Extension
    $relativePath = [Path]::GetDirectoryName([Path]::GetRelativePath($pwd, $_.FullName))

    $target = [Path]::Combine($targetRoot, $relativePath)

    md -force $target

    echo "Name: $name"
    echo "Ext: $ext"
    echo "RelPath: $relativePath"
    echo "Source: $_"
    echo "Target: $target"

    switch ($ext) {
        ".php" {
            $targetFile = [Path]::Combine($target, $name + ".html")
            ..\php\php.exe $sourceFile > $targetFile
        }
        Default {
            $targetFile = [Path]::Combine($target, $name + $ext)
            "JUST COPY"
            cp $sourceFile $target
        }
    }

}