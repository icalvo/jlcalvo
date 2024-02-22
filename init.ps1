function Install-WingetPackage {
    param ($packageId)
    "Ensuring $packageId is installed..."

    if ($null -eq (winget list -e --id $packageId --disable-interactivity | findstr $packageId)) {
        winget install -e --id $packageId --silent
    }
}

function Install-NpmPackage {
    param ($packageId)
    "Ensuring $packageId is installed..."

    if ($null -eq (npm list $packageId -g | findstr $packageId)) {
        npm install -g $packageId
    }
}

Install-WingetPackage OpenJS.NodeJS.LTS
Install-NpmPackage firebase-tools
Install-NpmPackage browser-sync
