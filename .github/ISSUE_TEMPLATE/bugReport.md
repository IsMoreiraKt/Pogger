---
name: Bug Report
about: Report a problem at Pogger
title: "[ BUG ]: "
labels: [bug]
assignees: []
---

### Summary
<!--
Explain the issue in one or two sentences.
What’s not working in Pogger?
Avoid vague phrases like “it doesn't work”.
-->

### Expected Behavior
<!--
What did you expect Pogger to do?
Be specific: expected log level, output format, context handling, etc.
-->

### Actual Behavior
<!--
What actually happened?
Was the log not written? Wrong log level? Context ignored? Wrong format?
Include a snippet of the actual log output if possible.
-->

### Steps to Reproduce
<!--
How do we reproduce the bug?
Give a minimal code example if you can. Paste only the relevant part.

Example:
```php
Log::error("Something broke.", ["user" => $user]);
```
-->

### Log Configuration (If applicable)
<!--
If you’re customizing output channels, formats, or anything via config/env/constants, paste it here.
-->

### Environment
<!--
Give us your setup:
    - PHP version
    - OS (if relevant)
    - Pogger version
    - Any frameworks involved? (Laravel, Symfony, pure PHP, etc.)
--> 

### Impact
<!--
How bad is it?
Is it just cosmetic (e.g. wrong format) or does it block debugging in prod?
-->

### Additional Info
<!--
Add logs, stack traces, screenshots or links to related problems/PRs.
If the bug started after a specific change or version update, mention it.
-->
