# PHP fopen() fclose() Error Handling

This repository demonstrates a common error in PHP file handling and its solution.

## The Problem

The `fopen()` function in PHP might fail to open a file. If this happens, the returned value is `false`. However, many programmers proceed to call `fclose()` without checking for this return value. Calling `fclose()` on a `false` value generates a warning, degrading the performance and stability of your application.

## The Solution

The solution is straightforward: check the return value of `fopen()` and proceed with `fclose()` only if the file was opened successfully.