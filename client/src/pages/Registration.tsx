import '../styles/registration.css';
import logoCRM from '../../public/images/crm-logo.png';

function Registration() {
    /*const {
        register,
        handleSubmit,
        watch,
        formState: { errors },
    } = useForm({
        defaultValues: {
            emailRequired: '',
        },
    });*/

    // const inputCheck = errors.emailRequired ? 'redInput' : 'field';

    // console.log(watch('emailRequired'));

    return (
        <>
            <div className="container">
                <header>
                    <div className="lang">
                        <div className="flex-cont">
                            <p>RU</p> <div className="iconru"></div>
                            <p className="phone-number">8 800 700-76-16</p>
                        </div>
                    </div>
                </header>

                <section className="main">
                    <div className="registration">
                        <div className="flex-head">
                            <div className="head-regist">
                                <img
                                    src={logoCRM}
                                    alt="logo CRM"
                                    width={165}
                                    className="main-crm-image"
                                    draggable="false"
                                />

                                <h1>VisionFlow</h1>
                            </div>
                            <p className="desc-1">
                                Вход в VisionFlow CRM Бизнес Онлайн
                            </p>
                        </div>

                        <div className="user-form">
                            <h1>Зарегистрируйтесь</h1>
                            <div className="input-email">
                                <p>Email</p>
                                <input type="text" />
                            </div>
                            <h3>
                                Регистрируясь, вы подтверждаете, что принимаете
                                Пользовательское соглашение, даете Поручение и
                                Согласие на обработку персональных данных.
                            </h3>
                            <button className="send-btn">
                                НАЧАТЬ БЕСПЛАТНО
                            </button>
                        </div>
                    </div>
                </section>

                <footer></footer>
            </div>
        </>
    );
}

export default Registration;
