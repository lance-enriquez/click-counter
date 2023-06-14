import axios from 'axios';
import * as S from './ClickMeButton.styled';

function ClickMeButton() {

    const handleClick = () => axios.post('/click', {
        _token : document.getElementsByName("csrf-token")[0]['content']
    });

    return (
        <S.ClickMeButton type="submit" onClick={handleClick}>Click Me!</S.ClickMeButton>
    );
}

export default ClickMeButton;
