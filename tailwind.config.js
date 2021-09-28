module.exports = {
    purge: ['./storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                roboto: 'Roboto'
            },
            color: {
                white: '#fff',

            }
        },

    },
    variants: {
        extend: {},

    },
    plugins: [],
}
