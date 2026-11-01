# cmsms-CSSPreprocessor

Maintained fork of the **CSSPreprocessor** module for CMS Made Simple.

The module extends Design Manager stylesheets with LESS and Sass compilation,
Smarty processing, minification, source maps and optional autoprefixing.

This repository is a community-maintained fork of CSSPreprocessor for
[CMS Made Simple](https://www.cmsmadesimple.org) (CMSMS), originally written by
Aire libre / Mathieu Muths.

## Why this fork exists

The previous releases predate current CMSMS and PHP versions. This fork keeps
the module usable on current sites and provides one shared source for fixes
instead of patching each installed copy separately.

## Compatibility

| | |
|---|---|
| Current fork release | CSSPreprocessor **3.1.1** |
| Tested with | CMS Made Simple 2.2.24, Smarty 4.5.5, **PHP 8.5.12**, AlmaLinux 9 / Apache 2.4 |
| Minimum CMSMS | 2.2.9 |
| Requires | No CMSMS module dependencies. The selected command-line compiler must be installed when using a command-line engine. |

## Version number

The fork reports version **3.1.1**. CMSMS requires a Module Manager upgrade
after replacing an older copy. Version 3.1 added module preferences and changed
their defaults.

## Installing / updating a site

The repository is called `cmsms-CSSPreprocessor`, but the module folder inside
a site must be named exactly **`CSSPreprocessor`**.

```sh
# Replace an existing module with the fork.
cd /path/to/site/modules
mv CSSPreprocessor CSSPreprocessor.orig
git clone https://github.com/stom66/cmsms-CSSPreprocessor.git CSSPreprocessor

# Later updates.
cd /path/to/site/modules/CSSPreprocessor && git pull --ff-only
```

Open Module Manager after the initial replacement and whenever the reported
module version changes. Complete any offered install or upgrade, then clear the
CMSMS cache. Ensure the web server blocks access to `.git` directories.

## Changes in this fork

The fork adds the following changes to the previous upstream code:

- Added a setting to control automatic front-end stylesheet recompilation for
  logged-in administrators.
- Added compiled-output caching when automatic administrator recompilation is
  disabled.
- Disabled automatic administrator recompilation by default to avoid
  production request delays.
- Loaded the base preprocessor class before the configured compiler so a clean
  cache can be compiled successfully.

See [`doc/changelog.html`](doc/changelog.html) for the complete module history.

## Contributing

- Use one focused change per commit with a conventional commit message.
- Keep existing stylesheet output unchanged unless the change requires it.
- Test clean-cache and cached compilation with the supported CMSMS and PHP
  versions.
- Update the module version and upgrade path together when a change requires a
  CMSMS module upgrade.

## Licence

GNU General Public License, version 2 or later. See [`LICENSE`](LICENSE).

Copyright Aire libre / Mathieu Muths and contributors.
