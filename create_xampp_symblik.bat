@echo off
echo "Symbolic link location (inside htdocs)"
set "LINK_PATH=C:\xampp\htdocs\php-learning-journey-2025"

echo "Getting the current directory (where the script is being run)"
set "TARGET_PATH=%cd%"

echo "Checking if the target folder exists"
if not exist "%TARGET_PATH%" (
  echo ❌ The target folder does not exist: %TARGET_PATH%
  exit /b 1
)

echo "Checking if the symbolic link or folder already exists"
if exist "%LINK_PATH%" (
  echo "⚠️ The link or folder \"%LINK_PATH%\" already exists. Deleting..."
  rmdir /s /q "%LINK_PATH%"
)

echo "Creating the symbolic link (requires administrator rights)"
mklink /D "%LINK_PATH%" "%TARGET_PATH%"
if exist "%LINK_PATH%" (
  echo "✅ Symbolic link created: %LINK_PATH% → %TARGET_PATH%"
) else (
  echo "❌ Failed to create symbolic link"
)
