<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | AmchiGames</title>
  </head>
  <body style="text-align: center">
    <canvas id="unity-canvas" width=960 height=600 style="width: 960px; height: 600px; background: #231F20"></canvas>
    <script src="Build/AmchiGameWeb.loader.js"></script>
    <script>
      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:
        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
      }

      createUnityInstance(document.querySelector("#unity-canvas"), {
        dataUrl: "Build/AmchiGameWeb.data.br",
        frameworkUrl: "Build/AmchiGameWeb.framework.js.br",
        codeUrl: "Build/AmchiGameWeb.wasm.br",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "Warner Music Russia",
        productName: "AmchiGames",
        productVersion: "1.0",
        // matchWebGLToCanvasSize: false, // Uncomment this to separately control WebGL canvas render size and DOM element size.
        // devicePixelRatio: 1, // Uncomment this to override low DPI rendering on high DPI displays.
      });
    </script>
  </body>
</html>
