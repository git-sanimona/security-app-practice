# security-app-practice

## 概要

COACHTECH 教材 Tutorial 10-6「Webセキュリティ ハンズオン」で作成した成果物です。
（**ここに、何を作ったかを1〜2行で書きましょう**）

## 使用技術

- PHP 8.x
- Laravel 10.x
- CSRF 保護（`@csrf`）、XSS 対策（Blade の自動エスケープ）
- GitHub

## 学んだこと

- CSRF保護の仕方
- XSS対策
-

## 動作確認

アクセスして動作確認　http://localhost/contact

入力フォームを表示
<img width="717" height="831" alt="Image" src="https://github.com/user-attachments/assets/2f05a811-9621-4bc5-938b-33914d172379" />
送信内容を表示
<img width="720" height="830" alt="Image" src="https://github.com/user-attachments/assets/b4b18cfa-c75e-48be-8ead-a8b197488ae2" />
＠csrfディレクティブなしで419エラー
<img width="720" height="830" alt="Image" src="https://github.com/user-attachments/assets/4af61e3e-b806-4fe7-a719-fda3008ccfa5" />

<script>alert('XSS')</script>をメッセージ入力で実行されずそのまま文字列で表示
<img width="719" height="829" alt="Image" src="https://github.com/user-attachments/assets/9d99fa61-e31a-4dbd-aab9-8320dc6cc3ed" />
<img width="722" height="824" alt="Image" src="https://github.com/user-attachments/assets/c916ced5-0bb6-440b-9b23-a0ea319a2626" />
