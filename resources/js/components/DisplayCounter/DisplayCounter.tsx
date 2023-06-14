import * as S from './DisplayCounter.styled';

function DisplayCounter({count}: DisplayCounterProps) {
    return (
        <S.DisplayCounterWrapper>
            <S.DisplayCounterContent>{count}</S.DisplayCounterContent>
        </S.DisplayCounterWrapper>
    );
}

interface DisplayCounterProps {
    count : number
}

export default DisplayCounter;
