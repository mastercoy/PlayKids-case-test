import React, {useEffect, useState} from "react";
import {createMuiTheme} from "@material-ui/core/styles";
import {jssPreset, StylesProvider, ThemeProvider} from "@material-ui/styles";
import rtl from "jss-rtl";
import {create} from "jss";
import {useSelector} from "react-redux";
import App from "./containers/App";

function ThemeApp() {
    const jss = create({plugins: [...jssPreset().plugins, rtl()]});
    const lang = useSelector(state => state.lang);
    const [direction, setDirection] = useState(lang === "en" ? "ltr" : "rtl");

    useEffect(() => {
        setDirection(lang === "en" ? "ltr" : "rtl");
    }, [lang]);

    const theme = createMuiTheme({
        direction: direction,
        palette: {
            primary: {
                main: "#1976d2"
            },
            secondary: {
                main: "#ac4556"
            }
        }
    });
    return (
        <StylesProvider jss={ jss }>
            <ThemeProvider theme={ theme }>
                <App/>
            </ThemeProvider>
        </StylesProvider>
    );
}

export default ThemeApp;
