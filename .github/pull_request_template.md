### Motivation
<!--
Explain why this Pull Request was created.
Describe the problem or task that motivated the change.

Be clear and direct. Avoid bullet points; use a short paragraph explaining the context and the reason behind the change.

Example:
This Pull Request addresses a recurring login failure issue affecting certain user sessions. It was triggered by recent changes in the session handling mechanism introduced in version 2.1.0.
-->

### Details
<!--
Describe the technical solution implemented in this PR.
Focus on what was changed and why.

Use paragraph form instead of lists. Emphasize how the solution works and highlight any significant logic, refactoring decisions, or edge cases handled.

Example:
The session validation logic was updated to check token freshness before attempting a user lookup. Additionally, the login controller now triggers a session regeneration on every successful login, improving overall security. Tests were rewritten to cover both the happy path and failure scenarios involving expired tokens.
-->

### Additional Information
<!--
Add any extra relevant information, such as environment variable changes, database migrations, or documentation updates.

Use full sentences and keep the section concise but informative.

Example:
To support the new functionality, two new environment variables were added: `JWT_SECRET` and `JWT_TTL`. Make sure to define these in the `.env` file before running the application. No DB migrations were required for this change.
-->

### Checklist [ Delete Before Sending ]
<!--
Make sure all of these are completed before submitting the PR.
Every new feature or bug fix *must* come with its own test coverage.
If something isn't done, explain why in a comment.

- [ ] Code was tested locally in a clean environment.
- [ ] New features or bug fixes include corresponding unit or integration tests.
- [ ] All tests (old + new) are passing.
- [ ] The implementation follows our code style and architectural guidelines.
- [ ] No unrelated code changes, formatting fixes, or commented-out code were included.
- [ ] Documentation (README, inline docs, or external references) was updated if needed.
-->
