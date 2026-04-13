# AGENTS.md

## Repository Overview

- This repository is a legacy PHP site for SGAgro, served directly from `C:\xampp\htdocs\siteSgagro2026`.
- The main app is a server-rendered website with PHP includes, Bootstrap assets, inline CSS, and inline JavaScript.
- There is no modern app build pipeline at the repository root.
- There is no root `package.json`, no root Composer setup, no PHPUnit config, and no root linter config.
- Treat the site as a mostly static/SSR PHP website rather than a compiled frontend app.
- The folders `sistema/submissao/Chart.js-master`, `sistema/submissao/plugin/mask`, `sistema/submissao/js/tests`, `sistema/submissao/PHPMailer_5.2.1`, and `sistema/submissao/MPDF60` are vendored or embedded third-party code.
- Unless a task explicitly targets those folders, prefer not to change them.

## Agent Priorities

- Preserve existing behavior and page structure.
- Make the smallest safe change.
- Follow nearby file conventions instead of introducing a new architecture.
- Avoid refactoring unrelated legacy code while solving a focused task.
- Keep edits compatible with direct Apache/XAMPP execution.

## Runtime And Local Development

- Expected local environment: XAMPP on Windows with Apache and PHP.
- Repository root maps to the local web root under `htdocs`.
- Main pages are typically opened through Apache, not through a Node dev server.
- Many pages depend on relative include paths, so run them through the expected URL structure rather than opening files directly.
- Database-backed pages rely on MySQL credentials defined in `config/config.php` and mirrored legacy files under `sistema/submissao/controller/funcoes/`.
- Treat all config files as sensitive because they may contain real credentials.

## Important Paths

- `view/`: public-facing PHP pages for the main site.
- `controller/`: lightweight PHP endpoints returning HTML or JSON.
- `config/`: DB configuration and shared MySQL helper functions.
- `webroot/`: shared CSS, JS, images, and fonts.
- `template/`: downloadable event documents and templates.
- `sistema/submissao/`: separate legacy submission/login subsystem with its own duplicated structure.

## Build Commands

- Main site: no build step.
- Main site assets are committed directly and served as-is.
- Best equivalent to a build check is PHP syntax validation plus manual browser verification.

### Root-Level Commands

- Start local site through XAMPP Apache.
- Open the site at its configured local URL, typically `http://localhost/siteSgagro2026/` or the virtual host in use.
- Validate one PHP file: `php -l view/home.php`
- Validate multiple edited PHP files: `php -l path/to/file.php`
- Validate all PHP files from a shell with ripgrep: `rg --files -g "*.php" | % { php -l $_ }`

## Lint Commands

- There is no configured repository-wide linter.
- For PHP work, use `php -l` as the primary automated syntax check.
- For frontend changes, rely on careful manual review in browser devtools because JS and CSS are mostly inline or vendored.

### Single-File Lint

- PHP: `php -l path/to/file.php`
- CSS: no formal linter; inspect in browser and keep style consistent with nearby code.
- JS: no formal linter; if editing inline JS, verify browser console stays clean.

## Test Commands

- There is no first-party automated test suite for the main site.
- There is no PHPUnit, Pest, Jest, or root npm test command.
- For this repository, testing usually means syntax checks plus manual page verification.
- After edits, verify the exact page, form, include, or endpoint you changed.

### Closest Equivalent To A Single Test

- Syntax-check one PHP file: `php -l path/to/file.php`
- Exercise one page manually in the browser.
- Exercise one JSON/controller endpoint with the browser, form submission, or an HTTP client.

### Manual Verification Checklist

- Load the affected page through Apache/XAMPP.
- Confirm PHP includes resolve correctly.
- Check the browser console for JavaScript errors.
- Check the Network tab for missing assets.
- If the page uses database data, verify the expected query path still works.
- If the change affects redirects, sessions, or forms, test the full flow end-to-end.

## Vendored Or Legacy Subproject Commands

- Do not treat these as the main project workflow.
- Only use them if you are intentionally editing the embedded vendor code.

### `sistema/submissao/plugin/mask`

- Install deps: `npm install`
- Run plugin tests: `grunt test`
- This is a vendored jQuery mask plugin, not the main website.

### `sistema/submissao/Chart.js-master`

- Install deps: `npm install`
- Build vendor bundle: `gulp build`
- Run vendor checks: `gulp test`
- This is an embedded Chart.js source tree, not the main website.

### `sistema/submissao/js/tests`

- Contains Bootstrap/QUnit test assets.
- Open manual test runner: `sistema/submissao/js/tests/index.html`
- These are framework tests, not application tests for SGAgro.

## Code Style Guidelines

## General Approach

- Match the surrounding legacy style before applying personal preferences.
- Prefer small, local fixes over broad cleanup.
- Preserve Portuguese labels, copy, and domain language unless the task is content editing.
- Keep markup and PHP interleaving simple and readable.

## PHP Conventions

- Use `<?php ... ?>` blocks in the same style as nearby files.
- Existing code commonly uses `include`, `include_once`, `require_once`, and direct superglobals.
- When editing older files, keep include paths relative and consistent with the file location.
- Prefer not to introduce namespaces, autoloading, or framework patterns into legacy pages.
- Prefer explicit temporary variables when they make mixed PHP/HTML blocks easier to follow.

## Imports And Includes

- Follow the local include style already used in the target directory.
- Use `include_once` or `require_once` for shared layout fragments when duplicate inclusion would be risky.
- Use plain `include` only when the file already follows that pattern and duplicate loading is acceptable.
- Do not convert all includes to absolute paths unless the task specifically addresses include resolution.

## Formatting

- Match the indentation style of the file you are editing.
- Many files use tabs in PHP blocks and spaces in HTML/CSS; preserve local consistency.
- Avoid large formatting-only diffs.
- Keep one statement per line unless the file strongly favors compressed legacy formatting.
- Keep inline styles and inline scripts only when that is already the page pattern.

## Types And Data Handling

- This codebase is not typed and does not use modern PHP type declarations.
- Do not add scalar type hints or return types across legacy files unless a task specifically requires it.
- Be careful with values from `$_GET`, `$_POST`, `$_COOKIE`, and `$_SESSION`.
- Normalize or validate request data before using it in new code.

## Naming

- Follow existing naming in the area you touch.
- Legacy PHP variables often use snake_case or lower-case names like `$campos`, `$tabela`, and `$condicao`.
- Page filenames are usually lower-case, descriptive, and `.php` based.
- Avoid renaming files, functions, or variables unless required for the task.

## Error Handling

- Preserve user-visible behavior unless the task asks for stricter errors.
- For new work, fail safely and avoid exposing credentials, raw SQL, or stack traces to end users.
- Prefer returning a clear message or controlled JSON payload over `die()` in new endpoints.
- If touching existing DB helpers, note that current functions may echo SQL on failure; do not expand that pattern.

## Security Expectations

- Do not commit secrets or copy real credentials into new files.
- Treat `config/config.php` and related duplicated config files as sensitive.
- New SQL should be written defensively; avoid expanding string-concatenated SQL when possible.
- Escape or validate request input, especially for SQL, HTML output, redirects, and file paths.
- Be careful with uploaded files and email-related code in the submission subsystem.

## Frontend Conventions

- The site uses Bootstrap-era markup and classes.
- Reuse existing CSS classes before adding new global rules.
- Prefer targeted CSS in `webroot/css/style.css` or in the local page only when the page already uses inline `<style>` blocks.
- Keep responsive behavior compatible with existing Bootstrap layouts.
- Avoid introducing modern frontend tooling for small content or layout changes.

## JavaScript Conventions

- Existing JavaScript is mostly jQuery and inline scripts.
- If editing a page with jQuery already loaded, follow that pattern instead of mixing in a new framework.
- Keep handlers scoped to the affected page when possible.
- Verify selectors against the actual DOM structure because IDs and classes are manually maintained.

## Database And Backend Helpers

- Shared DB helpers live in `config/funcoesmysql.php` and duplicated versions under `sistema/submissao/controller/funcoes/`.
- These helpers are procedural and rely on included connection globals.
- If a task touches both the public site and submission subsystem, check whether duplicated helper files must be updated in both locations.
- Avoid changing connection behavior unless the task is specifically about database access.

## What Not To Assume

- Do not assume a CI pipeline exists.
- Do not assume tests exist for the main site.
- Do not assume vendored library commands apply to the root project.
- Do not assume code duplication is accidental; some duplicated files are actively used.

## Cursor And Copilot Rules

- No `.cursorrules` file was found.
- No `.cursor/rules/` directory was found.
- No `.github/copilot-instructions.md` file was found.
- If those files are added later, merge their instructions into this document and treat the more specific rule as higher priority.

## Recommended Agent Workflow

- Inspect the target page, its includes, and any mirrored file in `sistema/submissao/` before editing.
- Make the smallest possible change.
- Run `php -l` on every edited PHP file.
- Manually verify the exact affected page or endpoint in the browser.
- Summarize any remaining manual checks if the change touches DB, email, upload, or session flows.
