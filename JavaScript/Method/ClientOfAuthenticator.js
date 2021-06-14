import AuthenticationService from './AuthenticationService';

class ClientOfAuthenticator {
	run = () => {
		const isAuthenticated = new AuthenticationService().isAuthenticated(33);
		console.log('33 is authenticated = ' + isAuthenticated);
	};
}
