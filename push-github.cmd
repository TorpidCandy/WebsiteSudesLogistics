@echo off

cd /d "%~dp0"

echo.
echo === UPDATE GITHUB SUDES ===
echo.

git add .
git commit -m "Update Sudes Logistics"
git push

echo.
echo === HOAN TAT ===
pause