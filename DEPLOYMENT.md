# Auto-deploy: GitHub → live server

Goal: every push to `origin/main` automatically publishes the repo to the
drbillywilsonbooks.com docroot. Status: **not yet set up** — this doc is the
checklist to make it happen.

## Prerequisites (gather before touching GitHub)

- [ ] **Server write access** for automation — one of:
  - SFTP/SSH account (preferred — enables rsync, fastest and cleanest)
  - FTPS account (works with the standard FTP deploy action)
  - From cPanel: create a dedicated `github-deploy` account scoped to the
    site docroot, rather than reusing a personal login.
- [ ] **Docroot path** on the server (e.g. `/home/<acct>/public_html/`).
- [ ] **Archive the live server's `index.html` files first.** At least
  `fasting-forward/index.html` and `born-4-the-storm/index.html` exist
  *only* on the live server (no matching version in any git history —
  verified 2026-06-11). A deploy that syncs with deletion enabled would
  destroy them.

## Setup steps

1. **Add repo secrets** in `orumarketing/drbwbook-php` →
   Settings → Secrets and variables → Actions:
   `DEPLOY_HOST`, `DEPLOY_USER`, and `DEPLOY_PASSWORD` (FTPS) or
   `DEPLOY_SSH_KEY` (SFTP/SSH). Secrets never go in the repo.

2. **Create `.github/workflows/deploy.yml`.** FTPS variant:

   ```yaml
   name: Deploy to live site
   on:
     push:
       branches: [main]
   jobs:
     deploy:
       runs-on: ubuntu-latest
       steps:
         - uses: actions/checkout@v4
         - uses: SamKirkland/FTP-Deploy-Action@v4.3.5
           with:
             server: ${{ secrets.DEPLOY_HOST }}
             username: ${{ secrets.DEPLOY_USER }}
             password: ${{ secrets.DEPLOY_PASSWORD }}
             protocol: ftps
             server-dir: public_html/        # confirm actual docroot
             exclude: |
               **/.git*
               **/.git*/**
               history/**
               DEPLOYMENT.md
               README.md
               LICENSE
   ```

   With SSH access, replace the FTP step with `rsync -avz --exclude-from`
   over an SSH key — faster on repeat deploys.

3. **Leave remote deletion OFF** (the action's default). Only consider a
   sync-with-delete mode after the live html files are archived and the
   server's stray files are reviewed.

4. **Test deploy:** push a trivial change (e.g. a CSS comment), watch the
   Actions tab, verify the change is live and nothing else moved.

5. **Optional safety gate:** add `environment: production` with a required
   reviewer so deploys wait for a manual "approve" click in GitHub instead
   of firing on every push. Recommended while `main` doubles as the working
   branch.

## Timeframe

| Item | Time |
| --- | --- |
| Workflow + secrets + test deploy | 1–2 hours |
| If credentials already in hand | Same day |
| If IT/host must provision a deploy account | A few days to a week |

## Open questions

- Who controls hosting for drbillywilsonbooks.com (ORU IT? outside vendor?)
  and what protocols does it allow?
- Should the leftover `index.html` files be deleted from the server once
  archived, since Apache serves `index.php` everywhere?
- Branch discipline: once auto-deploy is live, every push to `main` is a
  production release — adopt feature branches, or rely on the approval gate?
