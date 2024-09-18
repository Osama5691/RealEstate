const mongoose = require("mongoose");

const userSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
        unique: true,
    },
    number: {
        type: String,
        required: true,
        unique: true,
    },
    email: {
        type: String,
        required: true,
        unique: true
    },
    location: {
        type: String,
        required: true,
    },
    property_type: {
        type: String,
        required: true,
    },
    value: {
        type: Number,
        required: true,
    },
    ready_to_get_leads: {
        type: String,
        required: true
    }
});

const User = mongoose.model("User", userSchema); 
module.exports = User;  
