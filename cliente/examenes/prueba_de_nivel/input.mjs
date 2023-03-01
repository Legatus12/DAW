import path from 'path';
import fs from 'fs';

const input = JSON.parse(fs.readFileSync(path.join('.', 'datos2.json'), 'utf8'));

export default input;