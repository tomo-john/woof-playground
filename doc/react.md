## 1. React環境の準備

```
# React と必要なプラグインをインストール
npm install @vitejs/plugin-react react react-dom
```

## 2. Viteの設定を書き換える

`vite.config.js`を編集。

以下の内容でLaravelがReactのコードも処理してくれる。

```javascript
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
import react from '@vitejs/plugin-react'; // これを追加

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        react(), // これも追加
    ],
    server: {
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
```

## 3. JavaScritpファイルをReact対応にする

`resources/js/app.js`を編集。(編集前は空っぽだった)

=> ファイル拡張子を`.js`から`.jsx`へ変更(`resources/js/app.jsx`)

テスト的に下記のように編集。

```javascript
import '../css/app.css';

import React from 'react';
import { createRoot } from 'react-dom/client';

// 画面のどこにReactを表示させるか指定
const rootElement = document.getElementById('app');
if (rootElement) {
    createRoot(rootElement).render(
        <div className="p-6">
            <h1 className="text-2xl font-bold text-blue-600">Reactが動いた🐶</h1>
        </div>
    );
}
```

## 4. Bladeから呼び出す

```blade
<body>
    Top Page

    <div id="app"></div>

    @viteReactRefresh
    @vite(['resources/js/app.jsx'])
</body>
```

