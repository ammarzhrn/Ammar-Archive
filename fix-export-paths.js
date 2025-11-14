import fs from 'fs';
import { execSync } from 'child_process';
import { glob } from 'glob';

// Read manifest
const manifest = JSON.parse(fs.readFileSync('public/build/manifest.json', 'utf8'));
const cssFile = manifest['resources/css/app.css'].file;
const jsFile = manifest['resources/js/app.js'].file;

// Find all HTML files
const htmlFiles = glob.sync('dist/**/*.html');

// Fix each HTML file
htmlFiles.forEach(file => {
  let content = fs.readFileSync(file, 'utf8');
  
  // Fix Vite dev server URLs
  content = content.replace(/http:\/\/\[::1\]:5173\/@vite\/client/g, `/build/${jsFile}`);
  content = content.replace(/http:\/\/\[::1\]:5173\/resources\/css\/app\.css/g, `/build/${cssFile}`);
  content = content.replace(/http:\/\/\[::1\]:5173\/resources\/js\/app\.js/g, `/build/${jsFile}`);
  content = content.replace(/\/build\/@vite\/client/g, `/build/${jsFile}`);
  content = content.replace(/\/build\/resources\/css\/app\.css/g, `/build/${cssFile}`);
  content = content.replace(/\/build\/resources\/js\/app\.js/g, `/build/${jsFile}`);
  content = content.replace(/\/build\/assets\/assets\//g, '/build/assets/');
  
  // Fix asset paths
  content = content.replace(/http:\/\/localhost\/build\//g, '/build/');
  content = content.replace(/http:\/\/127\.0\.0\.1:8000\/build\//g, '/build/');
  
  // Fix anchor links (href attributes)
  content = content.replace(/href="http:\/\/localhost"/g, 'href="/"');
  content = content.replace(/href="http:\/\/localhost\//g, 'href="/');
  content = content.replace(/href="http:\/\/127\.0\.0\.1:8000"/g, 'href="/"');
  content = content.replace(/href="http:\/\/127\.0\.0\.1:8000\//g, 'href="/');
  
  // Fix any remaining localhost URLs (catch-all)
  content = content.replace(/http:\/\/127\.0\.0\.1:8000\//g, '/');
  content = content.replace(/http:\/\/localhost\//g, '/');
  
  fs.writeFileSync(file, content, 'utf8');
});

console.log(`✅ Fixed paths in ${htmlFiles.length} HTML files`);
console.log('✅ All paths fixed with production assets');

