module.exports = {
    title: 'Webxander HTML Docs',
    base: 'HTML',
    description: 'Generate HTML code easily with PHP',
    head: [
        ['link', { rel: 'stylesheet', href: 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' }]
    ],
    themeConfig: {
        displayAllHeaders: true, // Default: false,
        nav: [
          { text: 'Home', link: '/' },
          { text: 'Guide', link: '/guide/' },
          { text: 'GitHub', link: 'https://github.com/web-xander/HTML' }
        ],
        sidebar: [
            {
              title: 'Guide',   // required
              path: '/guide/',      // optional, which should be a absolute path.
              collapsable: false, // optional, defaults to true
              sidebarDepth: 2,    // optional, defaults to 1
              children: [
                './guide/',
                './guide/html',
                './guide/form',
                './guide/input'
              ]
            }
            
          ]
    }
}