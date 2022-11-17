const { registerBlockType } = wp.blocks;

import Editor from './Editor';
import Save from './Save';

registerBlockType('demo/block', {
  title: 'Hello Gutenberg',
  description: 'Custom Gutenberg Block Demo',
  icon: 'edit-large',
  category: 'custom-blocks',

  attributes: {
  },

  getEditWrapperProps() { 
    return {
      'data-align': 'wide'
    }; 
  },

  edit: Editor,
	save: Save,
});
