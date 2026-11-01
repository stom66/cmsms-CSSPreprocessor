CSSPreprocessor
===============

A module that extends the stylesheets system of CMS Made Simple with various CSS Preprocessors.

Uses the standard Stylesheets / Design manager and caching system. Works with CMSMS 1.11.11 (until 1.3) and 2.1+ series.

For the moment, only LESS / SASS preprocessors are provided (PHP and command-line - if available on your server), but you can extend it. Compiles Bootstrap and Foundation.
Supports SMARTY inside stylesheets and before compilation.

## Install

Clone this repository into the CMS Made Simple `modules` directory:

```sh
cd /path/to/cmsms/modules
git clone https://github.com/stom66/cmsms-csspreprocessor.git CSSPreprocessor
```

Then open Module Manager in CMS Made Simple to install or upgrade the module, and clear the CMS cache.

## Switch an existing installation to Git

Back up the current module directory, then clone this repository in its place:

```sh
cd /path/to/cmsms/modules
mv CSSPreprocessor CSSPreprocessor.backup-$(date +%Y%m%d)
git clone https://github.com/stom66/cmsms-csspreprocessor.git CSSPreprocessor
```

Open Module Manager to complete the upgrade, then clear the CMS cache.

## Update

Pull the latest module version:

```sh
cd /path/to/cmsms/modules/CSSPreprocessor
git pull --ff-only origin master
```

If the module version changed, open Module Manager to complete the upgrade. Clear the CMS cache after every update.
