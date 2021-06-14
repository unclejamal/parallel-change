import AuthenticationService from '../Method/AuthenticationService.js';

describe('authentication service', () => {
	it('administrator is always authenticated', () => {
		const service = new AuthenticationService();
		expect(service.isAuthenticated(12345)).toBeTruthy();
	});

	it('normal user is not authenticated initially', () => {
		const service = new AuthenticationService();
		expect(service.isAuthenticated(1111)).toBeFalsy();
	});
});
