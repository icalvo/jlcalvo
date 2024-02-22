# Intro
This is the repository for jlcalvo.com. It's a PHP project that can be built into a static website and published to Firebase.

# Tools
* init.ps1: Ensures that all the needed 3rd party tools are installed
* build.ps1: Builds the project with PHP into the `_publish` folder.
* serve.ps1: Start a local server on `_publish` folder with browser sync so that it automatically updates on the server when `build.ps1` is run.
* deploy.ps1: Deploys to Firebase based on the `firebase.json` configuration.
