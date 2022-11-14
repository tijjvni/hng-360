import SwaggerUI from 'swagger-ui'
import 'swagger-ui/dist/swagger-ui.css';

// alert("tititi");

SwaggerUI({
    dom_id: '#swagger-doc',
    url: '/api.yaml',
});