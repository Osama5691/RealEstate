const express = require("express");
const router = express.Router();
const User = require("../models/user");


router.get("/", (req, res) => {
    res.render("landingPage");
});

// Route to handle form submission
router.post("/submit_form", async (req, res) => {
    try {
        const user = new User({
            name: req.body.name,
            number: req.body.number,
            email: req.body.email,
            location: req.body.location,
            property_type: req.body.property_type,
            value: req.body.value,
            ready_to_get_leads: req.body.ready_to_get_leads
        });

        await user.save();
        res.render("index");
    } catch (error) {
        console.error(error);
        res.status(500).send("An error occurred while saving the data.");
    }
});

module.exports = router;
