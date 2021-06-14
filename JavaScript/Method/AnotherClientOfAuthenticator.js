import AuthenticationService from './AuthenticationService';

class AnotherClientOfAuthenticator {
	UnusedClientCode = () => {
		try {
			new AuthenticationService().isAuthenticated(3545);
		} catch (e) {}
	};
}
