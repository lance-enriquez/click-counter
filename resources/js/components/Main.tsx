import axios from 'axios';
import { useState, useEffect} from "react";
import { createRoot } from 'react-dom/client';
import DisplayCounter from './DisplayCounter';
import ClickMeButton from './ClickMeButton';

function Main() {
    const [count, setCount] = useState(0);

    const getCount = async () => {
        axios.get('/count').then(({data}) => {
            setCount(data.count ?? 0);
        })
    };

    const handleSubmit = (event) => {
        event.preventDefault();
        getCount();
    }

    useEffect(() => {
        getCount();
    }, []);

    return (
        <>
            <form onSubmit={handleSubmit}>
                <DisplayCounter count={count}/>
                <ClickMeButton/>
            </form>
        </>
    );
}

export default Main;

const root = createRoot(document.getElementById('content'));
root.render(<Main />);
