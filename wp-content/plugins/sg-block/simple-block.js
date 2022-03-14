wp.blocks.registerBlockType('sg-block/simple-block',{

    title: wp.i18n.__('Simple Block','text-domain'),
    description: wp.i18n.__('My block description','text-domain'),
    icon: 'universal-access-alt',
    category: 'common',
    edit: function (props){
        return wp.element.createElement('p', { className: 'custom-block'}, 'Hello gutenberg block');
    },
    save: function (){

        return wp.element.createElement('p', { className: 'custom-block'}, 'This in Post content save in database');
    }
});