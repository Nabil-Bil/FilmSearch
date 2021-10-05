module.exports = {
    purge: ['./storage/framework/views/*.php',
        './resources/views/**/*.blade.php',],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                roboto: 'Roboto'
            },
            color: {
                white: '#fff',
            },
        },

    },
    variants: {
        extend: {},

    },
    plugins: [],
}
