import os
import shutil
import os.path as p
import errno

srcfiles = [
  '_lib',
  '_pages',
  '_templates',
  'css',
  'img',
  'js',
  '404.php',
  #'config.php',
  'favicon.ico',
  'index.php',
]

#host specific files
hostfiles = [
  ('config','php'),
  ('','htaccess'),
]

host = 'physik'
srcpath = p.abspath('.')
dest = p.abspath('../docs-live/')

for f in srcfiles:
  print 'copying:', (p.join(srcpath,f),p.join(dest,f)),
  if p.isdir(p.join(srcpath,f)):
    shutil.copytree(p.join(srcpath,f),p.join(dest,f))
  else:
    shutil.copy(p.join(srcpath,f),p.join(dest,f))
    print ' (f)',
  print '   [ ok ]'
    
for (n, ext) in hostfiles:
  try:
    print 'copying:', (p.join(srcpath,n+'.'+host+'.'+ext),p.join(dest,n+'.'+ext))
    shutil.copy(p.join(srcpath,n+'.'+host+'.'+ext),p.join(dest,n+'.'+ext))
  except OSError as e:
    raise e
