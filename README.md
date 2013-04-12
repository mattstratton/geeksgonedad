# GeeksGoneDad.com

This is the repository for the code and themes for www.geeksgonedad.com

## Structure

* WordPress as a Git submodule in `/wp/`
* Custom content directory in `/content/` (cleaner, and also because it can't be in `/wp/`)
* `wp-config.php` in the root (because it can't be in `/wp/`)
* All writable directories are symlinked to similarly named locations under `/shared/`.

## Questions & Answers

**Q:** Why the `/shared/` symlink stuff for uploads?  
**A:** For local development, create `/shared/` (it is ignored by Git), and have the files live there. This ensures that non-code (uploads, etc) do not get updated into VCS

**Q:** How do we update WordPress?  
**A:** The submodule needs to be added. Matt will write up a process shortly.

**Q:** What's the deal with `local-config.php`?  
**A:** It is for local development, which might have different MySQL credentials or do things like enable query saving or debug mode. This file is ignored by Git, so it doesn't accidentally get checked in. If the file does not exist (which it shouldn't, in production), then WordPress will used the DB credentials defined in `wp-config.php`. After you clone this repo, copy (don't rename!) the local-config-sample.php to local-config.php and put in your dev database information.

