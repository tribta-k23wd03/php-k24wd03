import ChatLayout from '@/components/Chat/ChatLayout';
import ConversationList from '@/components/Chat/ConversationList';
import NewConversation from '@/components/Chat/NewConversation';

export default function Index({ conversations, users }) {
    return (
        <ChatLayout
            sidebar={
                <>
                    <NewConversation users={users} />
                    <ConversationList conversations={conversations} />
                </>
            }
        >
            <p>No Message Found.</p>
        </ChatLayout>
    );
}
