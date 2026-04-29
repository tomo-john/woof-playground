import '../css/app.css';

import React from 'react';
import { createRoot } from 'react-dom/client';

// 画面のどこにReactを表示させるか指定
const rootElement = document.getElementById('app');
if (rootElement) {
    createRoot(rootElement).render(
        <div className="p-6">
            <h1 className="text-2xl font-bold text-pink-600">React</h1>
            <i className="fa-solid fa-dog"></i>
        </div>
    );
}
