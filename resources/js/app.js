import './bootstrap';
import Alpine from 'alpinejs';

// import EditorJS from '@editorjs/editorjs';
// import Header from '@editorjs/header';
// import SimpleImage from '@editorjs/simple-image';
// import List from '@editorjs/list';

window.Alpine = Alpine;
Alpine.start();

// const editor = new EditorJS({
//   holder: 'editorjs',
//   placeholder: 'Tulis disini...',
//   tools: {
//     header: {
//       class: Header,
//       inlineToolbar: ['link']
//     },
//     image: {
//       class: SimpleImage,
//       inlineToolbar: true
//     },
//     list: {
//       class: List,
//       inlineToolbar: true
//     }
//   }
// });