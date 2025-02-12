describe('template spec', () => {
  
  /* ==== Test Created with Cypress Studio ==== */
  it('test 1', function() {
    /* ==== Generated with Cypress Studio ==== */
    cy.visit('http://localhost:8080');
    cy.get('#message').click();
    cy.get('#message').type('coucou les neuils');
    cy.get('#passwordinput').clear('h');
    cy.get('#passwordinput').type('haha');
    cy.get('#sendbutton').click();
    cy.get('#pasteurl').click();
    cy.get('#passworddecrypt').clear('h');
    cy.get('#passworddecrypt').type('haha{enter}');
    cy.get('#passwordform > .btn').click();
    /* ==== End Cypress Studio ==== */
  });
})