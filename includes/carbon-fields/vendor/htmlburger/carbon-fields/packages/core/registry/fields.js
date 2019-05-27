/**
 * Internal dependencies.
 */
import { createRegistry } from './index';

export const {
	registerFieldType,
	getFieldType
} = createRegistry( 'field', [
	'metabox',
	'block'
] );
