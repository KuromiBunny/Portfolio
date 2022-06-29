import { Given, When, Then } from 'cypress-cucumber-preprocessor/steps'

Given('I am on the login page', () => {
    // Zorg dat de onderstaande url verwijst naar de juiste folder in de htdocs
    cy.visit('http://localhost/.....');
});

When('I enter a correct username', () => {
    cy.get('[data-cy=username-input]').type('admin');
});

When('I enter a correct password', () => {
    cy.get('[data-cy=password-input]').type('123456');
});

When('I click the login button', () => {
    cy.get('[data-cy=login-btn]').click();
});

Then('I should be redirected to the logout page', () => {
    cy.get('[data-cy=login-succes-msg]').should('be.visible');
});