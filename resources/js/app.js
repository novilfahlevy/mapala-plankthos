import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

window.IMAGE_FILETYPES = ['.jpg', '.jpeg', '.png', '.bmp'];

window.checkFiletype = function(fakeFilename, extensions = IMAGE_FILETYPES) {
  const checkExtensionValid = filename => {
    return extensions.some(
      extension => extension.toLowerCase() == filename.substr(filename.length - extension.length, extension.length).toLowerCase()
    );
  }

  if (typeof fakeFilename == 'string') {
    return checkExtensionValid(fakeFilename);
  }

  return fakeFilename.every(filename => checkExtensionValid(filename));
}