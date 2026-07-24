// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/wagner/fb-golf/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/wagner/fb-golf/node_modules/laravel-vite-plugin/dist/index.js";
import { viteStaticCopy } from "file:///C:/laragon/www/wagner/fb-golf/node_modules/vite-plugin-static-copy/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true
    }),
    viteStaticCopy({
      targets: [
        {
          src: "resources/assets/client/lgpd/",
          dest: "client"
        },
        {
          src: "resources/assets/client/css/",
          dest: "client"
        },
        {
          src: "resources/assets/client/css/bootstrap",
          dest: "client"
        },
        {
          src: "resources/assets/client/css/bootstrap-icons",
          dest: "client"
        },
        {
          src: "resources/assets/client/css/typed.js",
          dest: "client"
        },
        {
          src: "resources/assets/client/images",
          dest: "client"
        },
        {
          src: "resources/assets/client/js/",
          dest: "client"
        },
        {
          src: "resources/assets/admin/css",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/data",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/fonts",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/images",
          dest: "admin"
        },
        {
          src: "resources/assets/admin/js",
          dest: "admin"
        }
      ]
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFx3YWduZXJcXFxcZmItZ29sZlwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcbGFyYWdvblxcXFx3d3dcXFxcd2FnbmVyXFxcXGZiLWdvbGZcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L2xhcmFnb24vd3d3L3dhZ25lci9mYi1nb2xmL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XHJcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xyXG5pbXBvcnQgeyB2aXRlU3RhdGljQ29weSB9IGZyb20gJ3ZpdGUtcGx1Z2luLXN0YXRpYy1jb3B5JztcclxuXHJcbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XHJcbiAgICBwbHVnaW5zOiBbXHJcbiAgICAgICAgbGFyYXZlbCh7XHJcbiAgICAgICAgICAgIGlucHV0OiBbJ3Jlc291cmNlcy9jc3MvYXBwLmNzcycsICdyZXNvdXJjZXMvanMvYXBwLmpzJ10sXHJcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXHJcbiAgICAgICAgfSksXHJcblxyXG4gICAgICAgIHZpdGVTdGF0aWNDb3B5KHtcclxuICAgICAgICAgICAgdGFyZ2V0czogW1xyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvY2xpZW50L2xncGQvJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnY2xpZW50J1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvYXNzZXRzL2NsaWVudC9jc3MvJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnY2xpZW50J1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvYXNzZXRzL2NsaWVudC9jc3MvYm9vdHN0cmFwJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnY2xpZW50J1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvYXNzZXRzL2NsaWVudC9jc3MvYm9vdHN0cmFwLWljb25zJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnY2xpZW50J1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvYXNzZXRzL2NsaWVudC9jc3MvdHlwZWQuanMnLFxyXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICdjbGllbnQnXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvY2xpZW50L2ltYWdlcycsXHJcbiAgICAgICAgICAgICAgICAgICAgZGVzdDogJ2NsaWVudCdcclxuICAgICAgICAgICAgICAgIH0sICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvY2xpZW50L2pzLycsXHJcbiAgICAgICAgICAgICAgICAgICAgZGVzdDogJ2NsaWVudCdcclxuICAgICAgICAgICAgICAgIH0sICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vY3NzJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vZGF0YScsXHJcbiAgICAgICAgICAgICAgICAgICAgZGVzdDogJ2FkbWluJ1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvYXNzZXRzL2FkbWluL2ZvbnRzJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vaW1hZ2VzJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnYWRtaW4nXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9hc3NldHMvYWRtaW4vanMnLFxyXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICdhZG1pbidcclxuICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIF1cclxuICAgICAgICB9KVxyXG4gICAgXVxyXG59KTtcclxuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFtUixTQUFTLG9CQUFvQjtBQUNoVCxPQUFPLGFBQWE7QUFDcEIsU0FBUyxzQkFBc0I7QUFFL0IsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTyxDQUFDLHlCQUF5QixxQkFBcUI7QUFBQSxNQUN0RCxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsSUFFRCxlQUFlO0FBQUEsTUFDWCxTQUFTO0FBQUEsUUFDTDtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsTUFDSjtBQUFBLElBQ0osQ0FBQztBQUFBLEVBQ0w7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
