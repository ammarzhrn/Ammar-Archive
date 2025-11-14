import fs from 'fs';
import { execSync } from 'child_process';

// Read manifest
const manifest = JSON.parse(fs.readFileSync('public/build/manifest.json', 'utf8'));
const cssFile = manifest['resources/css/app.css'].file;
const jsFile = manifest['resources/js/app.js'].file;

// Fix all HTML files - note: manifest file already includes 'assets/' in filename
const commands = [
  `s|http://\\[::1\\]:5173/@vite/client|/build/${jsFile}|g`,
  `s|http://\\[::1\\]:5173/resources/css/app.css|/build/${cssFile}|g`,
  `s|http://\\[::1\\]:5173/resources/js/app.js|/build/${jsFile}|g`,
  `s|/build/@vite/client|/build/${jsFile}|g`,
  `s|/build/resources/css/app.css|/build/${cssFile}|g`,
  `s|/build/resources/js/app.js|/build/${jsFile}|g`,
  `s|/build/assets/assets/|/build/assets/|g`,
  `s|http://localhost/build/|/build/|g`,
  `s|http://127.0.0.1:8000/build/|/build/|g`,
  `s|http://127.0.0.1:8000/|/|g`
].join('; ');

execSync(`find dist -name '*.html' -type f -exec sed -i '' "${commands}" {} \\;`, { stdio: 'inherit' });

console.log('✅ All paths fixed with production assets');

