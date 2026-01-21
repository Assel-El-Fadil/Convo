<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuraChat | Full Experience</title>
    <style>
        :root {
            --accent: #7c3aed;
            --accent-glow: rgba(124, 58, 237, 0.5);
            --glass: rgba(15, 23, 42, 0.6);
            --border: rgba(255, 255, 255, 0.1);
            --text: #f1f5f9;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }

        /* Animated Mesh Background */
        body {
            background: #0f172a;
            height: 100vh;
            width: 100vw;
            display: flex;
            overflow: hidden;
            color: var(--text);
        }

        .bg-blobs {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            filter: blur(80px);
            overflow: hidden;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            opacity: 0.4;
            animation: float 20s infinite alternate;
        }

        .blob-1 { background: #4f46e5; top: -10%; left: -10%; }
        .blob-2 { background: #7c3aed; bottom: -10%; right: -10%; animation-delay: -5s; }
        .blob-3 { background: #0ea5e9; top: 40%; left: 30%; animation-delay: -10s; }

        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(100px, 50px) scale(1.2); }
        }

        /* Full Screen Layout */
        .chat-app {
            display: flex;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(40px);
            background: rgba(15, 23, 42, 0.3);
        }

        /* Sidebar with Hover Effects */
        .sidebar {
            width: 320px;
            background: var(--glass);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 30px;
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(to right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact {
            padding: 15px 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: 0.3s;
            cursor: pointer;
            border-left: 3px solid transparent;
        }

        .contact:hover { background: rgba(255, 255, 255, 0.05); }
        .contact.active {
            background: rgba(124, 58, 237, 0.1);
            border-left: 3px solid var(--accent);
        }

        .avatar {
            width: 45px;
            height: 45px;
            border-radius: 14px;
            background: #334155;
            display: grid; place-items: center;
        }

        /* Main Chat Window */
        .main-chat {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.02);
        }

        .chat-header {
            padding: 20px 40px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .messages {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Bubbles with subtle glass reflection */
        .bubble {
            padding: 14px 20px;
            border-radius: 20px;
            max-width: 60%;
            font-size: 0.95rem;
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .bubble.sent {
            align-self: flex-end;
            background: var(--accent);
            color: white;
            border-bottom-right-radius: 4px;
        }

        .bubble.received {
            align-self: flex-start;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--border);
            border-bottom-left-radius: 4px;
        }

        /* Input Bar */
        .input-container {
            padding: 30px 40px;
            background: rgba(15, 23, 42, 0.4);
        }

        .input-wrapper {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border);
            padding: 8px 8px 8px 20px;
            border-radius: 16px;
            display: flex;
            align-items: center;
        }

        input {
            flex: 1;
            background: transparent;
            border: none;
            color: white;
            outline: none;
            font-size: 1rem;
        }

        .btn-send {
            background: var(--accent);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn-send:hover { background: #6d28d9; transform: translateY(-1px); }

    </style>
</head>
<body>

    <div class="bg-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <div class="chat-app">
        <aside class="sidebar">
            <div class="sidebar-header">AuraChat</div>
            <div class="contact active">
                <div class="avatar">JS</div>
                <div>
                    <p style="font-weight: 600;">Jane Smith</p>
                    <p style="font-size: 0.75rem; opacity: 0.6;">Typing...</p>
                </div>
            </div>
            <div class="contact">
                <div class="avatar">BT</div>
                <div>
                    <p style="font-weight: 600;">Project Team</p>
                    <p style="font-size: 0.75rem; opacity: 0.6;">12 new messages</p>
                </div>
            </div>
        </aside>

        <main class="main-chat">
            <header class="chat-header">
                <div>
                    <h3>Jane Smith</h3>
                    <p style="font-size: 0.8rem; color: #10b981;">● Online</p>
                </div>
            </header>

            <div class="messages">
                <div class="bubble received">Hello !</div>
                <div class="bubble sent">hi</div>
                <div class="bubble received">looks good.</div>
            </div>

            <div class="input-container">
                <div class="input-wrapper">
                    <input type="text" placeholder="Write a message...">
                    <button class="btn-send">Send</button>
                </div>
            </div>
        </main>
    </div>

</body>
</html>