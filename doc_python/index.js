/**
 * Docsify config
 */
 

window.$docsify = {
  name: "python技术文档",
  nameLink: 'http://m.hehuoya.com',
  auto2top: true,
  loadNavbar: true,
  loadSidebar: true,
  mergeNavbar: false,
  subMaxLevel: 2,
  // coverpage: true,
  // coverpage: 'cover.html',

  // logo: '/static/icon.png',

  homepage: "README.md",
  search: {
    noData: {
      "/": "No results!"
    },
    paths: "auto",
    placeholder: {
      "/": "Search"
    }
  },
  footer: {
      copy: '<span>京ICP备19040792号 &copy; 2020</span><br/>',
      auth: '合伙呀 邮箱：1211054926@qq.com',
      pre: '<hr/>',
      style: 'text-align: center;',
      style: 'className',
    },
  plantuml: {
    skin: 'default',
  } 
};
