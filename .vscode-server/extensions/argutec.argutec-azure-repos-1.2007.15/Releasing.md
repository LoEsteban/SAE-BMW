# Release procedure

To relese project to VS Code marketplace do the following:
1. push changes to github,
2. create tag with suitable version in format `X.X.X` - currently we use this format as `major.YYMM.minor` (ie version 1.2007.10 means major version 1, build in july 2020, minor version 10),
3. execute command Push (Follow tags).

Github actions should handle everything else. Versions in `package.json` and and `./src/helpers/constants.ts` aren't synchronized with published versions, modifications of these files is handled by Github actions. 