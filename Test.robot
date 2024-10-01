*** Settings ***
Library        RPA.Browser.Selenium            auto_close=${False}

*** Variables ***
${URL}      https://www.google.com/
${SEARCH_TERM}    Robot Framework   # Terme de recherche à remplir
${SEARCH_INPUT}    name:q           # Sélecteur du champ de recherche de Google

*** Test Cases ***
Connexion  
    Ouverture du navigateur
    Effectuer une recherche


*** Keywords ***
Ouverture du navigateur
    Open Browser    ${URL}    chrome
    Maximize Browser Window
    Wait Until Page Contains Element    ${SEARCH_INPUT}    timeout=10

Effectuer une recherche
    Wait Until Element Is Visible    ${SEARCH_INPUT}    timeout=10
    Input Text    ${SEARCH_INPUT}    ${SEARCH_TERM}
    Press Key    ${SEARCH_INPUT}    ENTER
    Wait Until Page Contains    ${SEARCH_TERM}    timeout=10
    

    




