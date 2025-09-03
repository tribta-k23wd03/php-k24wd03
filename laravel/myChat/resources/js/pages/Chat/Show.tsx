import ChatLayout from '@/components/Chat/ChatLayout';
import ConversationList from '@/components/Chat/ConversationList';
import MessageInput from '@/components/Chat/MessageInput';
import MessageList from '@/components/Chat/MessageList';
import { useEffect, useState } from 'react';

export default function Show({ conversation, messages, conversations = [] }) {
    const [items, setItems] = useState(messages.data);

    useEffect(() => setItems(messages.data), [messages]);

    useEffect(() => {
        const echo = (window as any).Echo;
        const channelName = `conversation.${conversation.id}`;
        const privateName = `private-${channelName}`;

        const ch = echo.private(privateName);

        const handle = (e) => {
            setItems((prev) => [...prev, e.message]);
        };

        ch.listen('.MessageCreated', handle);

        return () => {
            ch.stopListening('.MessageCreated');
            echo.leave(privateName);
        };
    }, [conversation.id]);

    return (
        <ChatLayout sidebar={<ConversationList conversations={conversations} />}>
            <div style={{ display: 'flex', flexDirection: 'column', height: '100%' }}>
                <div style={{ padding: '10px 16px', borderBottom: '1px solid #eee', background: '#fff' }}>
                    <strong>{conversation.name || (conversation.is_direct ? 'Direct message' : `Group #${conversation.id}`)}</strong>
                </div>
                <MessageList messages={{ data: items }} currentUserId={undefined} />
                <MessageInput key={conversation.id} conversationId={conversation.id} />
            </div>
        </ChatLayout>
    );
}
