# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.3](https://github.com/nix-community/composer-local-repo-plugin/compare/1.0.2...1.0.3)

### Merged

- ci: do not run test on PHP &lt; 8.0 [`#3`](https://github.com/nix-community/composer-local-repo-plugin/pull/3)

### Commits

- chore: update composer.json [`18d02e9`](https://github.com/nix-community/composer-local-repo-plugin/commit/18d02e9ddd1f16c9809bb2734407c58218f3cb72)
- refactor: ^7.2.5 || ^8.0 [`d136cf8`](https://github.com/nix-community/composer-local-repo-plugin/commit/d136cf8bcdea04f710826614b311f1a979d7cf97)

## [1.0.2](https://github.com/nix-community/composer-local-repo-plugin/compare/1.0.1...1.0.2) - 2023-09-18

### Merged

- fix: add optional destination directory argument [`#4`](https://github.com/nix-community/composer-local-repo-plugin/pull/4)

### Commits

- docs: update CHANGELOG [`3588ac3`](https://github.com/nix-community/composer-local-repo-plugin/commit/3588ac3b412b899269f8f91664c0b6c020b497e6)
- fix: add optional destination directory argument to avoid using bash pipes [`562d644`](https://github.com/nix-community/composer-local-repo-plugin/commit/562d6441f9180c1db266e006bedb3d65bdd88034)

## [1.0.1](https://github.com/nix-community/composer-local-repo-plugin/compare/1.0.0...1.0.1) - 2023-09-17

### Commits

- docs: update changelog [`3af6905`](https://github.com/nix-community/composer-local-repo-plugin/commit/3af6905fba6e75df17611a467a7c4d7decf5a385)
- chore: PHP version required is now `^7` or `^8` [`d2d46bb`](https://github.com/nix-community/composer-local-repo-plugin/commit/d2d46bb56e0978429d5555fd9c7d78fcfbfab15c)

## [1.0.0](https://github.com/nix-community/composer-local-repo-plugin/compare/0.0.1...1.0.0) - 2023-09-10

### Commits

- docs: add changelog [`e873024`](https://github.com/nix-community/composer-local-repo-plugin/commit/e873024da70a57fa390308e3f685db9169076018)
- chore: add `auto-changelog` configuration file [`04d55e9`](https://github.com/nix-community/composer-local-repo-plugin/commit/04d55e946ba6cd9bb6bdae6e7e06fcba541aef9f)
- ci: update actions, minor refactoring [`474e841`](https://github.com/nix-community/composer-local-repo-plugin/commit/474e841216d6c523c9f80b52fd67280b474b1ac7)
- ci: update default branch name from `master` to `main` [`80ff998`](https://github.com/nix-community/composer-local-repo-plugin/commit/80ff998bd5fbe3b6fb843dc41233ea464eb57e22)
- chore: switch  namespace from `drupol` to `nix-community` [`814acb6`](https://github.com/nix-community/composer-local-repo-plugin/commit/814acb6470c5863717e1aca97372e65e64efab2b)
- now rely on code from Composer ^2.6 [`0b91eb1`](https://github.com/nix-community/composer-local-repo-plugin/commit/0b91eb1e6aad11a9845455722fe6a10a78c80545)
- chore: minor documentation update [`f0a8e48`](https://github.com/nix-community/composer-local-repo-plugin/commit/f0a8e48ce25c1c746f868dbe5d1e9c138cff47b9)
- cs: autofix code style [`bc823e1`](https://github.com/nix-community/composer-local-repo-plugin/commit/bc823e11252d93ef9b2a32ff68fb17d3e78b9a66)
- Revert "fix: handling of package of type `metapackage`" [`f794053`](https://github.com/nix-community/composer-local-repo-plugin/commit/f794053e51f65bbbb56325fefd57cf0c7441c9cf)
- fix: handling of package of type `metapackage` [`90ef652`](https://github.com/nix-community/composer-local-repo-plugin/commit/90ef652143da9adbc660e746b33adb18696f7e44)
- update codestyle [`9fdaf1a`](https://github.com/nix-community/composer-local-repo-plugin/commit/9fdaf1afd0a7692db8f2c144bb81f97426e97c7a)
- fix: make sure `repo-dir` is a directory [`0da6a42`](https://github.com/nix-community/composer-local-repo-plugin/commit/0da6a4279ba811047b086bb719cd1d743ef582e1)
- refactor: remove duplicated method [`a53bfe1`](https://github.com/nix-community/composer-local-repo-plugin/commit/a53bfe1f439b1fc1c84273c192896b74e3bbd92f)
- refactor: create services [`843535f`](https://github.com/nix-community/composer-local-repo-plugin/commit/843535f9391a3ab753ebe27309cb36717b2c03b9)
- docs: update README [`865f732`](https://github.com/nix-community/composer-local-repo-plugin/commit/865f7321ab6805e67df9ad53f8fd76c737da5382)
- fix: update condition [`28ec793`](https://github.com/nix-community/composer-local-repo-plugin/commit/28ec79317d6d72ae92e6a9a965038b465767e92f)
- refactor: minor change [`2d5e415`](https://github.com/nix-community/composer-local-repo-plugin/commit/2d5e4155c56331e392e03f66dd97575965ee867f)
- docs: update `README` [`4f26698`](https://github.com/nix-community/composer-local-repo-plugin/commit/4f266989746846583c18983a0cbb77aec0a269dd)
- chore: update `.gitignore` [`3e7d85e`](https://github.com/nix-community/composer-local-repo-plugin/commit/3e7d85e5d93e90cd2199937a078441e9611d8cdb)
- normalize composer.json [`11f6ba3`](https://github.com/nix-community/composer-local-repo-plugin/commit/11f6ba3fe5aa748a2da5e39bc7bdedc280f5d6f4)
- ci: fix code-style workflow [`b7a3bca`](https://github.com/nix-community/composer-local-repo-plugin/commit/b7a3bca1815b6f23a0762dfa8f0f4d7e803f2013)
- chore(deps): bump cachix/install-nix-action from 20 to 21 [`b393f05`](https://github.com/nix-community/composer-local-repo-plugin/commit/b393f05c79e4ef37676a8079daf52a4b080ada8e)
- chore: add Github static files and CI [`707b616`](https://github.com/nix-community/composer-local-repo-plugin/commit/707b616f909a0bb6db959b7a9c06bbb0be49f56b)
- chore: set minimum PHP version [`47fff7b`](https://github.com/nix-community/composer-local-repo-plugin/commit/47fff7b99929b92988c2e6f06ef86f225063fc43)
- chore: autofix cs [`cf8b363`](https://github.com/nix-community/composer-local-repo-plugin/commit/cf8b363f570a50b705017ef4e64ad3208359d01b)
- refactor: remove `EventSubscriberInterface` interface [`0c136ea`](https://github.com/nix-community/composer-local-repo-plugin/commit/0c136eae2c0cbc77ef0584f9c28d1a690986a55b)
- fix: make Psalm and PHPStan happy [`a8e1b8d`](https://github.com/nix-community/composer-local-repo-plugin/commit/a8e1b8d8e7297be1e6ef9a08e9b5939cb6d766bf)
- tests: add integration tests [`8a2a97b`](https://github.com/nix-community/composer-local-repo-plugin/commit/8a2a97be7ee68af389dc9e2a8aaa46659d19b845)
- refactor: remove `CommandProvider` [`a3fa63c`](https://github.com/nix-community/composer-local-repo-plugin/commit/a3fa63c78dc46d0173d7bd667ace678df17fd7ac)
- chore: autofix code style [`0176b23`](https://github.com/nix-community/composer-local-repo-plugin/commit/0176b238a7b5c3707f1c565a37bef1bbeed242fc)
- chore: add license [`fee3240`](https://github.com/nix-community/composer-local-repo-plugin/commit/fee3240c694613d108558f3c7377174d3cda9744)
- docs: update README [`307fbba`](https://github.com/nix-community/composer-local-repo-plugin/commit/307fbba57d644c28950384b5899551522bd7539e)
- refactor: make sure the packages.json sorted [`7bde2a1`](https://github.com/nix-community/composer-local-repo-plugin/commit/7bde2a1aeaa0c16781ba27efb806989369a90c2d)
- refactor: select the source type dynamically [`8694447`](https://github.com/nix-community/composer-local-repo-plugin/commit/8694447e944175f1cdb823ddb0f4f63f20cb9b1d)
- chore: `use` cleanup [`f69cdd8`](https://github.com/nix-community/composer-local-repo-plugin/commit/f69cdd89c44b44895659380faf3e2f8c976d60f4)
- refactor: use `downloadAndInstallPackageSync` function [`59bf2b1`](https://github.com/nix-community/composer-local-repo-plugin/commit/59bf2b1a746d876cb5726fe79aa9ba0cc3197f5a)
- refactor: use Composer API to download and install packages at the right place [`2ab7604`](https://github.com/nix-community/composer-local-repo-plugin/commit/2ab7604ac3b316010b7f847dbc72dc5670f7f623)
- docs: update README [`5893258`](https://github.com/nix-community/composer-local-repo-plugin/commit/5893258f4407c9b2315396a2f3cbb0babf65021a)
- refactor: use `copy` to build the local `composer` repo [`4a73cb3`](https://github.com/nix-community/composer-local-repo-plugin/commit/4a73cb34d438b7921fea64677f734b3f2cba167e)
- docs: update README [`cee1287`](https://github.com/nix-community/composer-local-repo-plugin/commit/cee128786ad09441a00903a82a8fcd66868275ef)
- chore: update `.envrc` [`0a6980c`](https://github.com/nix-community/composer-local-repo-plugin/commit/0a6980c9a35b2b4af79852340768e0124f1e0ed7)
- feat: filter `dist` on `type` key [`9b25742`](https://github.com/nix-community/composer-local-repo-plugin/commit/9b25742c3840baffef3622ba78a28f7c9641e6fd)
- fix: download of source [`9db1247`](https://github.com/nix-community/composer-local-repo-plugin/commit/9db1247612ceec5ec4dfbccb72e3c84a98079ef4)
- fix: update option name [`2ff293e`](https://github.com/nix-community/composer-local-repo-plugin/commit/2ff293e9db716d315c891aeb287de7bc1ddabb98)
- add `only-print-manifest` option [`15d4e76`](https://github.com/nix-community/composer-local-repo-plugin/commit/15d4e76c6e211f4f3dca5c109edc335f1bd1568c)
- feat: add `-m` and `-r` options [`39e78ab`](https://github.com/nix-community/composer-local-repo-plugin/commit/39e78ab18a0f25b0be3f17fe8238a1cc5c240ed9)
- refactor: sort array keys to avoid surprises [`ab9757a`](https://github.com/nix-community/composer-local-repo-plugin/commit/ab9757aec56a9fa2a5a2895eb0fe3bc78837ed49)
- docs: add a note about symlinking and copying packages [`140d569`](https://github.com/nix-community/composer-local-repo-plugin/commit/140d56979dd3962dcfcdbab240a66f2ccfca9d42)
- fix: update `realpath` usage [`dc4c89d`](https://github.com/nix-community/composer-local-repo-plugin/commit/dc4c89dd068bf0fc87069f45175131367dac5a33)
- refactor: minor rewrite and cleanup [`5599b9e`](https://github.com/nix-community/composer-local-repo-plugin/commit/5599b9ebb715779a99fc878d4571121f0dceec8c)
- chore: minor updates [`609c8e5`](https://github.com/nix-community/composer-local-repo-plugin/commit/609c8e57ca34b22683790c20c8782df70db08e0a)
- refactor: disable sorting [`d706c39`](https://github.com/nix-community/composer-local-repo-plugin/commit/d706c39d9eca58c42a830f3ea7688e51827f2d33)
- comment why we do not use minimal definition for repository packages. Tested with Composer version 2.5.5 [`f106888`](https://github.com/nix-community/composer-local-repo-plugin/commit/f106888d666f18f86794aa658919d31dceafe439)
- try to use `Package::getVersion()` [`53d4055`](https://github.com/nix-community/composer-local-repo-plugin/commit/53d40555d92c05a73a0a5d3267cbb13b637ec0ed)
- add package info [`44373c5`](https://github.com/nix-community/composer-local-repo-plugin/commit/44373c56bdc255660acfe1f647daa6a88a693bae)
- minor: array-keys reordering [`0df7879`](https://github.com/nix-community/composer-local-repo-plugin/commit/0df7879a11cb56aaefae4c9f3042e6ab3589685d)
- fix: remove `.git` directory [`a7e2935`](https://github.com/nix-community/composer-local-repo-plugin/commit/a7e2935aabffaba5ba4419dcf24577d4309425f2)
- fix arguments [`6ae0525`](https://github.com/nix-community/composer-local-repo-plugin/commit/6ae0525c6a06e3362247dc92637a6a7adb7286b2)
- update option [`6802fdb`](https://github.com/nix-community/composer-local-repo-plugin/commit/6802fdbb87ae3c5c8e84c24b3396dcc4760e2dfb)
- use option instead of argument [`635ff16`](https://github.com/nix-community/composer-local-repo-plugin/commit/635ff16ea906a96ab77977a3877e1c9adc8b3db0)
- add `no-dev` argument [`ddde3f9`](https://github.com/nix-community/composer-local-repo-plugin/commit/ddde3f90db5c195ff48f748bd7d358c27b8ac2c4)

## 0.0.1 - 2023-04-26

### Commits

- Initial set of files [`bd8013d`](https://github.com/nix-community/composer-local-repo-plugin/commit/bd8013d2d479af06963800d4e5d2546649c3fdac)
