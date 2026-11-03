# Behavioral Design Patterns in PHP — Student Starter Project

This project contains one folder and `index.php` demonstration for each of the 11 patterns in the activity sheet.

## Requirements
- PHP 8.0+ recommended (the project uses PHP 8 features such as typed properties, union types, and `match`).
- VS Code or another editor.
- Terminal / PowerShell.

## How to run
1. Extract this ZIP.
2. Open the extracted `behavioral-patterns` folder in VS Code.
3. Open Terminal → New Terminal.
4. Check PHP: `php -v`
5. Run each pattern separately from the main project folder, for example:
   - `php .\01-chain-of-responsibility\index.php`
   - `php .\02-command\index.php`
   - `php .\03-interpreter\index.php`
   - `php .\04-iterator\index.php`
   - `php .\05-mediator\index.php`
   - `php .\06-memento\index.php`
   - `php .\07-observer\index.php`
   - `php .\08-state\index.php`
   - `php .\09-strategy\index.php`
   - `php .\10-template-method\index.php`
   - `php .\11-visitor\index.php`

Run one command at a time. Each folder has its own `index.php`.

## Understand the patterns
1. Chain of Responsibility: each handler either processes a request or passes it to the next handler.
2. Command: each action is an object with an `execute()` method; the invoker triggers it.
3. Interpreter: expression objects evaluate conditions against a student context. This is a small demonstration, not a full text-query parser.
4. Iterator: `StudentCollection` implements `IteratorAggregate`; `foreach` traverses it without exposing the internal array.
5. Mediator: students send messages through `ChatMediator`, which distributes them to other students.
6. Memento: a snapshot of the profile is saved and restored by the history object.
7. Observer: the grade system notifies every registered observer when a grade is set.
8. State: enrollment behavior depends on the current state object.
9. Strategy: the calculator can swap grade calculation strategies. The transmuted-grade formula is illustrative only; replace it with your instructor's required formula if one is provided.
10. Template Method: `generateReport()` fixes the process while subclasses provide report-specific steps.
11. Visitor: record objects accept visitors that perform operations. `PDFReportVisitor` only prints demonstration text; it does not generate a real PDF file.

## Important before submission
- This is a working educational starting point. Read, run, test, and adapt it so you can explain it in your own words.
- Check your instructor's exact requirements and coordinate with classmates on the four patterns for the video.
- The sample output and names are illustrative; adjust as needed.
- The activity asks you to record your face and screen while implementing the four selected patterns, upload the video to YouTube, and submit both the video and GitHub links in the appropriate Google Form fields.
- Do not claim a feature works unless you have run and tested it.
