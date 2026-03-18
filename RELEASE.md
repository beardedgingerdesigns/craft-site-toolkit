# Release Workflow

1. Make template changes in `templates/`.
2. Commit to `main`.
3. Tag a release, for example `git tag 1.0.1`.
4. Push commits and tags:
   - `git push origin main`
   - `git push origin --tags`
5. In each Craft project, update the package:
   - `ddev composer update mbd/craft-site-toolkit`
6. If the plugin is not already installed in a project:
   - `ddev exec php craft plugin/install site-toolkit`

## Notes

- Keep shared macros under `templates/_macros/`.
- Shared global includes should live under `templates/global/_includes/`.
- Prefer semver tags over `dev-main` in consuming projects.
