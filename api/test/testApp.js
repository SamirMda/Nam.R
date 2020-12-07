let chai = require('chai');
let chaiHttp = require('chai-http');
var expect = require('chai').expect;
var should = require('chai').should();
let app = require('../app');

chai.use(chaiHttp);

describe('API Call', function() {
	describe('/GET List', function() {
		it('it should GET all the element on the list', function(done) {
			chai.request(app)
				.get('/list')
				.end((err, res) => {
					res.should.have.status(200);
					expect(res.body).to.exist;
					done();
				});
		});
	});
});